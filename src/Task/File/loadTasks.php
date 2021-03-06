<?php
namespace Robo\Task\File;

use Robo\Collection\Temporary;

trait loadTasks
{
    /**
     * @param array|\Iterator $files
     *
     * @return \Robo\Task\File\Concat
     */
    protected function taskConcat($files)
    {
        return $this->task(Concat::class, $files);
    }

    /**
     * @param string $file
     *
     * @return \Robo\Task\File\Replace
     */
    protected function taskReplaceInFile($file)
    {
        return $this->task(Replace::class, $file);
    }

    /**
     * @param string $file
     *
     * @return \Robo\Task\File\Write
     */
    protected function taskWriteToFile($file)
    {
        return $this->task(Write::class, $file);
    }

    /**
     * @param string $filename
     * @param string $extension
     * @param string $baseDir
     * @param bool $includeRandomPart
     *
     * @return \Robo\Task\File\TmpFile
     */
    protected function taskTmpFile($filename = 'tmp', $extension = '', $baseDir = '', $includeRandomPart = true)
    {
        return $this->task(TmpFile::class, $filename, $extension, $baseDir, $includeRandomPart);
    }
}
